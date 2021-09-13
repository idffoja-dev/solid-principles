class Entity {
    constructor(name) {
        this.name = name
    }
}

const mover = {
    move() {
        console.log(`${this.name} moved`)
    }
}

const attacker = {
    attack(target) {
        console.log(`${this.name} attacked ${target.name} for ${this.damage} damage`)
        target.takeDamage(this.damage)
    }
}

const vulnerable = {
    takeDamage(damage) {
        this.health -= damage
        console.log(`${this.name} has ${this.health} health remaining`)
    }
}

class Character extends Entity {
    constructor(name, damage, health) {
        super(name)
        this.damage = damage
        this.health = health
    }
}

Object.assign(Character.prototype, mover)
Object.assign(Character.prototype, attacker)
Object.assign(Character.prototype, vulnerable)

class TrainingDummy extends Entity {
    constructor(name, health) {
        super(name)
        this.health = health
    }
}

Object.assign(TrainingDummy.prototype, vulnerable)

class Turret extends Entity {
    constructor(name, damage) {
        super(name)
        this.damage = damage
    }
}

Object.assign(Turret.prototype, attacker)

const turret = new Turret('Turret', 5)
const character = new Character('Ian', 3, 100)
const dummy = new TrainingDummy('TrainingDummy', 200)

turret.attack(character)
character.move()
character.attack(dummy)