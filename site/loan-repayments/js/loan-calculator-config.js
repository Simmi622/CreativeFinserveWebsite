(function($){

var __translations = gbst.namespace("gbst.loan.app.loancalculator.translations");

__translations.en = {
  "colors": {
    "primaryColor": "#00B2A9",
    "secondaryColor": "#002663",
    "titleColor": "#FFFFFF",
    "subtitleColor": "#FFFFFF",
    "subtitleBgColor": "#666666",
    "textColor": "#002663"
  },
  "number": {
    "currency": {
      "format": {
        "unit": "Rs ",
        "format": "%u%n",
        "htmlFormat": "<sup>%u</sup><span>%n</span>"
      }
    },
    "format": {
      "delimiter": ",",
      "separator": "."
    }
  },
  "labels": {
    "loanCalculator": {
      "calculatorTitle": "Loan Repayments",
      "disclaimer": ""
    },
    "controls": {
      "title": "Your loan details",
      "principal": "Loan amount",
      "interestRate": "Interest rate",
      "term": "Loan term",
      "termFormat": {
        "one": "{{count}} year",
        "other": "{{count}} years"
      },
      "frequency": "Payment frequency",
      "repaymentType": "Loan type",
      "chartTableRadioButton": ""
    },
    "results": {
      "regularRepayment": "{{frequencyLabel}} repayments",
      "totalInterest": "Total interest payable",
      "resultsHeader": "Your results",
      "showDisplayType": true,
      "displayType": {
        "graph": "Graph",
        "table": "Table",
        "borderColor": "#FFFFFF"
      },
      "amortizationTable": {
        "paymentNumberHeader": "Payment #",
        "principalHeader": "Principal",
        "interestHeader": "Interest",
        "balanceHeader": "Balance"
      }
    },
    "chart": {
      "totalRemaining": "Total",
      "principalRemaining": "Principal",
      "interestRemaining": "Interest",
      "xAxis": "Years",
      "yAxis": "Amount owing ({{unit}})"
    },
    "chartTooltip": {
      "title": "Year {{year}}",
      "loanItemHeader": "Loan item",
      "remainingValueHeader": "Remaining value"
    },
    "infoBox": {
      "title": "Calculator Information",
      "content": "<p>The Loan Repayments Calculator calculates the repayment amount depending upon the repayment frequency requested, which is dependent upon amount, term and interest rate.</p><h3>Calculator Assumptions</h3><h4>Length of Month</h4><p>Months are of equal length. However given some months are longer than others interest charged will vary depending upon the month.</p><h4>Number of Weeks & Fortnights in a Year</h4><p>One year is assumed to contain exactly 52 weeks or 26 fortnights. Thus each year has 364 days.</p><h4>Rounding of Repayment Amounts</h4><p>The calculator uses the unrounded repayment to derive the amount of interest payable over the full term of the loan, however, institutions round repayments to the nearest cent. Unrounded payments provide for constant line within the graph. Note that the final repayment after the increase in repayment amount will be a partial repayment as required to reduce the loan balance to zero.</p><h4>Interest Rate</h4><p>The interest rate input in the loan section of the calculator is a nominal interest rate per annum. The interest applied over each repayment period has been calculated as the nominal interest rate divided by the number of deposit periods.</p><h4>Timing of Interest Conversion</h4><p>The calculator assumes that interest is charged to the loan account at the same frequency as the repayments are made. In practice, there may be differences between the timing of the loan repayments and the timing of the interest charges being added to the loan balance.</p>"
    }
  },
  "defaults": {
    "values": {
      "principal": 250000,
      "interestRate": 6.25,
      "term": 30,
      "frequency": "month",
      "repaymentType": "PI",
      "displayType": "GRAPH"
    },
    "controls": {
      "principal": {
        "min": 1000,
        "max": 990000000,
        "step": 1000,
        "keyboard": false
      },
      "interestRate": {
        "min": 1.0,
        "max": 25.0,
        "step": 0.01,
        "keyboard": false
      },
      "term": {
        "min": 1,
        "max": 30,
        "step": 1,
        "keyboard": false
      },
      "frequency": [
        {
          "label": "Monthly",
          "value": "month"
        },
        {
          "label": "Fortnightly",
          "value": "fortnight"
        },
        {
          "label": "Weekly",
          "value": "week"
        }
      ],
      "repaymentType": [
        {
          "label": "Principal & Interest",
          "value": "PI"
        },
        {
          "label": "Interest only",
          "value": "IO"
        }
      ]
    }
  }
};

}(jQuery));