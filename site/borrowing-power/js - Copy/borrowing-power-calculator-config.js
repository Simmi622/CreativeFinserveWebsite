(function($){

var __translations = gbst.namespace("gbst.loan.app.borrowingpowercalculator.translations");

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
    "borrowingPowerCalculator": {
      "calculatorTitle": "Borrowing Power",
      "disclaimer": ""
    },
    "yourIncomeControlsView": {
      "controlsTitle": "Your income details",
      "hasJointIncomeLabel": "I have a partner",
      "primarySalaryLabel": "Salary",
      "secondarySalaryLabel": "Second Salary",
      "otherIncomeLabel": "Other Income",
      "primarySalaryTaxLabel": "",
      "primarySalaryFrequencyLabel": "",
      "secondarySalaryTaxLabel": "",
      "secondarySalaryFrequencyLabel": "",
      "otherIncomeTaxLabel": "",
      "otherIncomeFrequencyLabel": ""
    },
    "yourExpensesControlsView": {
      "controlsTitle": "Your expense details",
      "dependantsLabel": "Dependants",
      "annualExpensesLabel": "Annual expenses",
      "useDefaultLabel": "Use average annual expenses",
      "carLoanRepaymentLabel": "Car loan repayment",
      "carLoanRepaymentFrequencyLabel": "",
      "creditCardRepaymentLabel": "Credit card repayment",
      "creditCardRepaymentFrequencyLabel": "",
      "otherPaymentsLabel": "Other payments",
      "otherPaymentsFrequencyLabel": "",
      "showDefaultExpenseCheckbox": true
    },
    "loanDetailsControlsView": {
      "controlsTitle": "Loan details",
      "interestRateLabel": "Interest rate",
      "termLabel": "Loan term",
      "termFormat": {
        "one": "{{count}} year",
        "other": "{{count}} years"
      }
    },
    "resultsView": {
      "borrowingAmountLabel": "You can borrow up to",
      "regularRepaymentLabel": "{{frequencyLabel}} repayments",
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
      "totalRemainingTitle": "Total",
      "principalRemainingTitle": "Principal",
      "interestRemainingTitle": "Interest",
      "xAxisTitle": "Years elapsed",
      "yAxisTitle": "Loan balance ({{unit}})"
    },
    "chartTooltip": {
      "title": "Year {{year}}"
    },
    "infoBox": {
      "title": "Calculator Information",
      "content": "<p>The Borrowing Power Calculator calculates a possible maximum loan amount available based on both income and expenses entered.  The values provided can only be taken as an estimate of the amount to be borrowed and does not take into account specific factors used by individual lenders in determining their own criteria.</p><h3>Calculator Assumptions</h3><h4>Expense Details and Default Values</h4><ul><li>Default annual expense allowance - The calculator assumes that the borrower has a minimum set of expenses as defined below<table class ='dependantsTable'><tr><th>Number of dependants</th><th>Single</th><th>Joint</th></tr><tr><td>0</td><td>{{singleExpense0}}</td><td>{{jointExpense0}}</td></tr><tr><td>1</td><td>{{singleExpense1}}</td><td>{{jointExpense1}}</td></tr><tr><td>2</td><td>{{singleExpense2}}</td><td>{{jointExpense2}}</td></tr><tr><td>3</td><td>{{singleExpense3}}</td><td>{{jointExpense3}}</td></tr><tr><td>4</td><td>{{singleExpense4}}</td><td>{{jointExpense4}}</td></tr></table></li><li>Default extra core expenses for more than 4 dependants - currently set four dependents plus an additional {{additionalExpense}} for each further dependent.</li><li>Maximum percentage of income available - currently set at {{servicableIncomeFactor}} of income</li></ul><h4>Loan Details</h4><p>Interest rate increase allowance buffer - Current version of the calculator uses an interest rate buffer of {{interestRateBuffer}}. There is no ability to adjust this amount. </p><h4>Month</h4><p>All months are assumed to be equal. In reality, many loans accrue on a daily basis this can lead to varying interest in different months.</p><h4>Number of Weeks & Fortnights in a Year</h4><p>One year is assumed to contain exactly 52 weeks or 26 fortnights. Thus the assumption is for a 364 day year.</p><h4>Rounding</h4><p>The calculator uses the unrounded repayment to derive the amount of interest payable over the full term of the loan, however, institutions round repayments to the nearest cent. Unrounded payments provide for constant line within the graph. Note that the final repayment after the increase in repayment amount will be a partial repayment as required to reduce the loan balance to zero.</p>"
    }
  },
  "defaults": {
    "values": {
      "hasJointIncome": false,
      "primarySalary": 20000,
      "primarySalaryTax": "net",
      "primarySalaryFrequency": "month",
      "secondarySalary": 4000,
      "secondarySalaryTax": "net",
      "secondarySalaryFrequency": "month",
      "otherIncome": 0,
      "otherIncomeTax": "gross",
      "otherIncomeFrequency": "month",
      "dependants": 0,
      "annualExpenses": 10000,
      "useDefault": true,
      "carLoanRepayment": 0,
      "carLoanRepaymentFrequency": "month",
      "creditCardRepayment": 0,
      "creditCardRepaymentFrequency": "month",
      "otherPayments": 0,
      "otherPaymentsFrequency": "fortnight",
      "interestRate": 7.25,
      "term": 30,
      "principal": 100000,
      "frequency": "month",
      "repaymentType": "PI",
      "displayType": "GRAPH"
    },
    "controls": {
      "primarySalary": {
        "min": 0,
        "max": 200000,
        "step": 100,
        "keyboard": false
      },
      "secondarySalary": {
        "min": 0,
        "max": 200000,
        "step": 100,
        "keyboard": false
      },
      "otherIncome": {
        "min": 0,
        "max": 200000,
        "step": 100,
        "keyboard": false
      },
      "annualExpenses": {
        "min": 0,
        "max": 1000000,
        "step": 10,
        "keyboard": false
      },
      "carLoanRepayment": {
        "min": 0,
        "max": 50000,
        "step": 50,
        "keyboard": false
      },
      "creditCardRepayment": {
        "min": 0,
        "max": 50000,
        "step": 100,
        "keyboard": false
      },
      "otherPayments": {
        "min": 0,
        "max": 50000,
        "step": 100,
        "keyboard": false
      },
      "interestRate": {
        "min": 0.1,
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
      "serviceability": {
        "singleBaseExpense": 100000,
        "singleDependentAdditionalExpense": 3740,
        "jointBaseExpense": 25200,
        "jointDependentAdditionalExpense": 3740,
        "servicableIncomeFactor": 0.8,
        "useIntRateBufferFlag": true,
        "interestRateBuffer": 0.02,
        "defaultBPIntRate": 7.25
      },
      "creditCardExpense": {
        "useCreditCardLimitExpense": false,
        "creditCardLimitExpense": 0.03,
        "creditCardLimitExpenseLabel": "Monthly Credit Card Repayments"
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
      "tax": [
        /*{
          "label": "Gross",
          "value": "gross"
        },*/
        {
          "label": "Net",
          "value": "net"
        }
      ],
      "dependants": [
        {
          "label": "0",
          "value": "0"
        },
        {
          "label": "1",
          "value": "1"
        },
        {
          "label": "2",
          "value": "2"
        },
        {
          "label": "3",
          "value": "3"
        },
        {
          "label": "4",
          "value": "4"
        },
        {
          "label": "5+",
          "value": "5"
        }
      ]
    }
  }
};

}(jQuery));