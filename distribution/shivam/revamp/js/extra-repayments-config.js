(function($){

var __translations = gbst.namespace("gbst.loan.app.extrarepaymentscalculator.translations");

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
        "unit": "Rs",
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
      "calculatorTitle": "Extra Repayments",
      "disclaimer": ""
    },
    "loanControlsView": {
      "controlsTitle": "Your loan details",
      "principal": "Loan amount (Rs)",
      "interestRate": "Interest rate",
      "term": "Loan term",
      "termFormat": {
        "one": "{{count}} year",
        "other": "{{count}} years"
      },
      "frequency": "Payment frequency",
      "extraContribution": "Extra contribution",
      "extraContributionStartYear": "Extra contribution starts after",
      "extraContributionTitle": "Your extra contributions details",
      "chartTableRadioButtonLabel": ""
    },
    "resultsView": {
      "timeSaved": "Time saved",
      "interestSaved": "Interest saved",
      "minRepayment": {
        "month": "Minimum monthly repayments",
        "fortnight": "Minimum fortnightly repayments",
        "week": "Minimum weekly repayments"
      },
      "incRepayment": {
        "month": "Increased monthly repayments",
        "fortnight": "Increased fortnightly repayments",
        "week": "Increased weekly repayments"
      },
      "yearsFormat": {
        "one": "year",
        "other": "years"
      },
      "monthsFormat": {
        "one": "month",
        "other": "months"
      },
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
    "chartView": {
      "originalBalanceTitle": "Original Balance",
      "balanceAfterExtraRepaymentsTitle": "Balance after extra repayments",
      "xAxisTitle": "Years",
      "yAxisTitle": "Amount owning ({{unit}})"
    },
    "chartTooltip": {
      "title": "Year {{year}}",
      "loanItemHeader": "Loan item",
      "remainingValueHeader": "Remaining value"
    },
    "infoBox": {
      "title": "Calculator Information",
      "content": "<p></p>"
    }
  },
  "defaults": {
    "values": {
      "principal": 100000,
      "interestRate": 6.25,
      "term": 30,
      "frequency": "month",
      "extraContribution": 100,
      "extraContributionStartYear": 5,
      "displayType": "GRAPH"
    },
    "controls": {
      "principal": {
        "min": 500,
        "max": 990000000,
        "step": 500,
        "keyboard": false
      },
      "interestRate": {
        "min": 1.0,
        "max": 15.0,
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
      "extraContribution": {
        "min": 0,
        "max": 9000000,
        "step": 100,
        "keyboard": false
      },
      "extraContributionStartYear": {
        "min": 0,
        "max": 30,
        "step": 1,
        "keyboard": false
      }
    }
  }
};

}(jQuery));