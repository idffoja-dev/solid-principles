function printSurveyForm(questions) {
    questions.forEach(question => {
        console.log(question.description)
        switch (question.type) {
            case 'boolean':
                console.log('1. True')
                console.log('2. False')
                break
            case 'multiple choice':
                question.options.forEach((option, index) => {
                    console.log(`${index + 1}. ${option}`)
                })
                break
            case 'text':
                console.log('Answer: _________________')
                break
            case 'range':
                console.log('Minimum: ________________')
                console.log('Maximum: ________________')
                break
        }
        console.log('')
    })
}

const questions = [{
    type: 'boolean',
    description: 'Is this presentation useful?',
}, {
    type: 'multiple choice',
    description: 'What type of developer are you?',
    options: ['Backend', 'Frontend', 'Full Stack'],
}, {
    type: 'text',
    description: 'Describe your favorite SOLID principle',
}, {
    type: 'range',
    description: 'From what years did you study coding?'
}]

printSurveyForm(questions)