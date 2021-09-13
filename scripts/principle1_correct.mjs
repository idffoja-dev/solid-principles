import logMessage from './logger.mjs'

class ExpenseTracker {
    constructor(expenseLimit) {
        this.expenseLimit = expenseLimit
        this.currentExpense = 0
    }

    trackExpense(expense) {
        this.currentExpense += expense
        if (this.currentExpense > this.expenseLimit) {
            logMessage('Expense Limit Exceeded')
        }
    }
}

const expenseTracker = new ExpenseTracker(1000)

expenseTracker.trackExpense(100)
expenseTracker.trackExpense(600)
expenseTracker.trackExpense(500)