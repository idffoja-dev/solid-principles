import logMessage from './logger.mjs'

class BooleanQuestion {
    constructor(description) {
        this.description = description
    }

    printQuestionChoices() {
        logMessage('1. True')
        logMessage('2. False')
    }
}

class MultipleChoiceQuestion {
    constructor(description, options) {
        this.description = description
        this.options = options
    }

    printQuestionChoices() {
        this.options.forEach((option, index) => {
            logMessage(`${index + 1}. ${option}`)
        })
    }
}

class TextQuestion {
    constructor(description) {
        this.description = description
    }

    printQuestionChoices() {
        logMessage('Answer: _________________')
    }
}

class RangeQuestion {
    constructor(description) {
        this.description = description
    }

    printQuestionChoices() {
        logMessage('Minimum: __________')
        logMessage('Maximum: __________')
    }
}

function printSurveyForm(questions) {
    questions.forEach(question => {
        console.log(question.description)
        question.printQuestionChoices()
        console.log('')
    })
}

const questions = [
    new BooleanQuestion('Is this presentation useful?'),
    new MultipleChoiceQuestion(
        'What type of developer are you?', ['Backend', 'Frontend', 'Full Stack']
    ),
    new TextQuestion('Describe your favorite SOLID principle'),
    new RangeQuestion('What year did you study programming?'),
]

printSurveyForm(questions)