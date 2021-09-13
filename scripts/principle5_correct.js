class Store {
    constructor(paymentProcessor) {
        this.paymentProcessor = paymentProcessor
    }

    purchaseBike(quantity) {
        this.paymentProcessor.pay(200 * quantity)
    }

    purchaseHelmet(quantity) {
        this.paymentProcessor.pay(15 * quantity)
    }
}

class StripePaymentProcessor {
    constructor(user) {
        this.stripe = new Stripe(user)
    }

    pay(amountInPesos) {
        this.stripe.makePayment(amountInPesos * 100)
    }
}

class GcashPaymentProcessor {
    constructor(user) {
        this.user = user
        this.gcash = new Gcash()
    }

    pay(amountInPesos) {
        this.gcash.makePayment(this.user, amountInPesos)
    }
}

class Stripe {
    constructor(user) {
        this.user = user
    }

    makePayment(amountInCents) {
        console.log(`${this.user} made a payment of PHP ${amountInCents / 100} with Stripe`)
    }
}

class Gcash {
    makePayment(user, amountInPesos) {
        console.log(`${user} made a payment of PHP ${amountInPesos} with Stripe`)
    }
}

const store = new Store(new GcashPaymentProcessor('Ian'))
store.purchaseBike(2)
store.purchaseHelmet(2)