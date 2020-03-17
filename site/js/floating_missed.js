var floatingMenunewId = 'floatdiv_new';
var floatingMenunew =
{
    targetX: 50,
    targetY: 500,

    hasInner: typeof(window.innerWidth) == 'number',
    hasElement: typeof(document.documentElement) == 'object'
        && typeof(document.documentElement.clientWidth) == 'number',

    menu:
        document.getElementById
        ? document.getElementById(floatingMenunewId)
        : document.all
          ? document.all[floatingMenunewId]
          : document.layers[floatingMenunewId]
};

floatingMenunew.move = function ()
{
    floatingMenunew.menu.style.left = floatingMenunew.nextX + 'px';
    floatingMenunew.menu.style.top = floatingMenunew.nextY + 'px';
}

floatingMenunew.computeShifts = function ()
{
    var de = document.documentElement;

    floatingMenunew.shiftX =  
        floatingMenunew.hasInner  
        ? pageXOffset  
        : floatingMenunew.hasElement  
          ? de.scrollLeft  
          : document.body.scrollLeft;  
    if (floatingMenunew.targetX < 0)
    {
        floatingMenunew.shiftX +=
            floatingMenunew.hasElement
            ? de.clientWidth
            : document.body.clientWidth;
    }

    floatingMenunew.shiftY = 
        floatingMenunew.hasInner
        ? pageYOffset
        : floatingMenunew.hasElement
          ? de.scrollTop
          : document.body.scrollTop;
    if (floatingMenunew.targetY < 0)
    {
        if (floatingMenunew.hasElement && floatingMenunew.hasInner)
        {
            // Handle Opera 8 problems
            floatingMenunew.shiftY +=
                de.clientHeight > window.innerHeight
                ? window.innerHeight
                : de.clientHeight
        }
        else
        {
            floatingMenunew.shiftY +=
                floatingMenunew.hasElement
                ? de.clientHeight
                : document.body.clientHeight;
        }
    }
}

floatingMenunew.calculateCornerX = function()
{
    if (floatingMenunew.targetX != 'center')
        return floatingMenunew.shiftX + floatingMenunew.targetX;

    var width = parseInt(floatingMenunew.menu.offsetWidth);

    var cornerX =
        floatingMenunew.hasElement
        ? (floatingMenunew.hasInner
           ? pageXOffset
           : document.documentElement.scrollLeft) + 
          (document.documentElement.clientWidth - width)/2
        : document.body.scrollLeft + 
          (document.body.clientWidth - width)/2;
    return cornerX;
};

floatingMenunew.calculateCornerY = function()
{
    if (floatingMenunew.targetY != 'center')
        return floatingMenunew.shiftY + floatingMenunew.targetY;

    var height = parseInt(floatingMenunew.menu.offsetHeight);

    // Handle Opera 8 problems
    var clientHeight = 
        floatingMenunew.hasElement && floatingMenunew.hasInner
        && document.documentElement.clientHeight 
            > window.innerHeight
        ? window.innerHeight
        : document.documentElement.clientHeight

    var cornerY =
        floatingMenunew.hasElement
        ? (floatingMenunew.hasInner  
           ? pageYOffset
           : document.documentElement.scrollTop) + 
          (clientHeight - height)/2
        : document.body.scrollTop + 
          (document.body.clientHeight - height)/2;
    return cornerY;
};

floatingMenunew.doFloat = function()
{
    // Check if reference to menu was lost due
    // to ajax manipuations
    if (!floatingMenunew.menu)
    {
        menu = document.getElementById
            ? document.getElementById(floatingMenunewId)
            : document.all
              ? document.all[floatingMenunewId]
              : document.layers[floatingMenunewId];

        initSecondary();
    }

    var stepX, stepY;

    floatingMenunew.computeShifts();

    var cornerX = floatingMenunew.calculateCornerX();

    var stepX = (cornerX - floatingMenunew.nextX) * .07;
    if (Math.abs(stepX) < .5)
    {
        stepX = cornerX - floatingMenunew.nextX;
    }

    var cornerY = floatingMenunew.calculateCornerY();

    var stepY = (cornerY - floatingMenunew.nextY) * .07;
    if (Math.abs(stepY) < .5)
    {
        stepY = cornerY - floatingMenunew.nextY;
    }

    if (Math.abs(stepX) > 0 ||
        Math.abs(stepY) > 0)
    {
        floatingMenunew.nextX += stepX;
        floatingMenunew.nextY += stepY;
        floatingMenunew.move();
    }

    setTimeout('floatingMenunew.doFloat()', 20);
};

// addEvent designed by Aaron Moore
floatingMenunew.addEvent = function(element, listener, handler)
{
    if(typeof element[listener] != 'function' || 
       typeof element[listener + '_num'] == 'undefined')
    {
        element[listener + '_num'] = 0;
        if (typeof element[listener] == 'function')
        {
            element[listener + 0] = element[listener];
            element[listener + '_num']++;
        }
        element[listener] = function(e)
        {
            var r = true;
            e = (e) ? e : window.event;
            for(var i = element[listener + '_num'] -1; i >= 0; i--)
            {
                if(element[listener + i](e) == false)
                    r = false;
            }
            return r;
        }
    }

    //if handler is not already stored, assign it
    for(var i = 0; i < element[listener + '_num']; i++)
        if(element[listener + i] == handler)
            return;
    element[listener + element[listener + '_num']] = handler;
    element[listener + '_num']++;
};

floatingMenunew.init = function()
{
    floatingMenunew.initSecondary();
    floatingMenunew.doFloat();
};

// Some browsers init scrollbars only after
// full document load.
floatingMenunew.initSecondary = function()
{
    floatingMenunew.computeShifts();
    floatingMenunew.nextX = floatingMenunew.calculateCornerX();
    floatingMenunew.nextY = floatingMenunew.calculateCornerY();
    floatingMenunew.move();
}

if (document.layers)
    floatingMenunew.addEvent(window, 'onload', floatingMenunew.init);
else
{
    floatingMenunew.init();
    floatingMenunew.addEvent(window, 'onload',
        floatingMenunew.initSecondary);
}

