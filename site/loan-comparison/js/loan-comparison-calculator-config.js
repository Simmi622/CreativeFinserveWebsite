(function($){

var __translations = gbst.namespace("gbst.loan.app.loancomparisoncalculator.translations");

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
      "calculatorTitle": "Loan Comparison",
      "disclaimer": "This calculator is provided for guidance purposes only and any result is based on the accuracy of the information provided. This calculator does not take into account your personal circumstances or financial situation."
    },
    "loanCommonDetailsView": {
      "controlsTitle": "Common loan details",
      "LoanAmountLabel": "Loan amount",
      "termLabel": "Loan term",
      "termFormat": {
        "one": "{{count}} year",
        "other": "{{count}} years"
      },
      "upfrontFeesLabel": "Upfront fees"
    },
    "loan1": {
      "title": "Loan #1",
      "upfrontFeesLabel": "Upfront fees",
      "ongoingFeesLabel": "Ongoing fees",
      "ongoingFeesFrequencyLabel": "",
      "introductoryTermFormat": {
        "one": "{{count}} month",
        "other": "{{count}} months"
      },
      "ongoingRateLabel": "Ongoing rate",
      "introductoryRateCheckBoxLabel": "This loan has an introductory rate",
      "introductoryRateLabel": "Introductory Rate",
      "introductoryTermLabel": "Introductory Term"
    },
    "loan2": {
      "title": "Loan #2",
      "upfrontFeesLabel": "Upfront fees",
      "ongoingFeesLabel": "Ongoing fees",
      "ongoingFeesFrequencyLabel": "",
      "ongoingRateLabel": "Ongoing rate",
      "introductoryRateCheckBoxLabel": "This loan has an introductory rate",
      "introductoryRateLabel": "Introductory Rate",
      "introductoryTermLabel": "Introductory Term"
    },
    "resultsView": {
      "regularRepaymentLabel": "Ongoing repayment per {{frequencyLabel}}",
      "totalInterestLabel": "Total payable",
      "loanSavingsLabel": "{{loanMessage}} will save you",
      "introRepaymentLabel": "Intro repayment per month",
      "ongoingRepaymentLabel": "Ongoing repayment per month",
      "totalPayableLabel": "Total Payable",
      "loan1Label": "Loan #1",
      "loan2Label": "Loan #2",
      "resultsHeader": "Your results"
    },
    "chartView": {
      "totalAccumulatedTitle": "Cumulative saving",
      "xAxisTitle": "Years elapsed",
      "yAxisTitle": "Amount saved ({{unit}})"
    },
    "chartTooltip": {
      "title": "Year {{year}}",
      "loanItemHeader": "Loan #{{loanNumber}} will save you:"
    },
    "infoBox": {
      "title": "Calculator Information",
      "content": "<p>The Loan Comparison Calculator calculates the total amounts payable given two alternative loans thus provides the comparative amount saved. The two loans allow for the entry of different expense amounts, for both upfront and ongoing (the options of monthly, fortnightly or weekly frequencies are allowed within the calculators).</p><br/><p>The two loan options allow for alternate introductory interest rates and terms, and different interest rates for the remainder of the term. The calculation is performed based on a monthly repayment frequency, in respect of the common loan parameters entered, namely amount and total term in years.</p><h3>Calculator Assumptions</h3><h4>Length of Month</h4><p>All months are assumed to be equal. In reality, many loans accrue on a daily basis this can lead to varying interest in different months.</p><h4>Number of Weeks & Fortnights in a Year</h4><p>One year is assumed to contain exactly 52 weeks or 26 fortnights. Thus the assumption is for a 364 day year.</p><h4>Rounding of Repayment Amounts</h4><p>The calculator uses the unrounded repayment to derive the amount of interest payable over the full term of the loan, however, institutions round repayments to the nearest cent. Unrounded payments provide for constant line within the graph. Note that the final repayment after the increase in repayment amount will be a partial repayment as required to reduce the loan balance to zero.</p><h4>Amounts of Totals Payable under each Loan</h4><p>The calculator quotes the total payable under each scenario in dollars and cents.</p><h4>Amount of Saving under Lower Cost Loan</h4><p>The calculation of the amount of repayments saved under the lower cost loan is based on unrounded payment amounts. The amount saved is quoted in dollars and cents, not rounded to the nearest dollar.</p><h4>Interest Rate</h4><p>The interest rate input in the loan section of the calculator is a nominal interest rate per annum. The interest applied over each repayment period has been calculated as the nominal interest rate divided by the number of deposit periods.</p><h4>Timing of Interest Conversion</h4><p>The calculator assumes that interest is charged to the loan account at the same frequency as the repayments are made. In practice, there may be differences between the timing of the loan repayments and the timing of the interest charges being added to the loan balance.</p>"
    }
  },
  "defaults": {
    "commonDefaults": {
      "loanAmount": 100000,
      "loanTerm": 30
    },
    "loanDefaults1": {
      "upfrontFees": 350,
      "ongoingFees": 0,
      "ongoingFeesFrequency": "month",
      "ongoingRate": 7.25,
      "introductoryRate": 5.75,
      "introductoryTerm": 24,
      "introductoryRateCheckBox": true
    },
    "loanDefaults2": {
      "upfrontFees": 350,
      "ongoingFees": 0,
      "ongoingFeesFrequency": "month",
      "ongoingRate": 6.75,
      "introductoryRate": 4.25,
      "introductoryTerm": 36,
      "introductoryRateCheckBox": true
    },
    "controls": {
      "loanAmount": {
        "min": 500,
        "max": 990000000,
        "step": 100,
        "keyboard": false
      },
      "loanTerm": {
        "min": 1,
        "max": 30,
        "step": 1,
        "keyboard": false
      },
      "upfrontFees": {
        "min": 0,
        "max": 5000,
        "step": 10,
        "keyboard": false
      },
      "ongoingFees": {
        "min": 0,
        "max": 1000,
        "step": 1,
        "keyboard": false
      },
      "frequency": [
        {
          "label": "Annually",
          "value": "annual"
        },
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
      "ongoingRate": {
        "min": 1.0,
        "max": 25.0,
        "step": 0.01,
        "keyboard": false
      },
      "introductoryRate": {
        "min": 0.25,
        "max": 15.0,
        "step": 0.01,
        "keyboard": false
      },
      "introductoryTerm": {
        "min": 0,
        "max": 48,
        "step": 1,
        "keyboard": false
      }
    }
  }
};

}(jQuery));