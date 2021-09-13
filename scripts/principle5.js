class Store {
    constructor(user) {
        this.gcash = new Gcash(user)
            // this.stripe = new Stripe(user)
    }

    purchaseBike(quantity) {
        this.stripe.makePayment(200 * quantity * 100)
    }

    purchaseHelmet(quantity) {
        this.stripe.makePayment(15 * quantity * 100)
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

const store = new Store('Ian')
store.purchaseBike(2)
store.purchaseHelmet(2)