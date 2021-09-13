class Entity {
    constructor(name, damage, health) {
        this.name = name
        this.damage = damage
        this.health = health
    }

    move() {
        console.log(`${this.name} moved`)
    }

    attack(target) {
        console.log(`${this.name} attacked ${target.name} for ${this.damage} damage`)
        target.takeDamage(this.damage)
    }

    takeDamage(damage) {
        this.health -= damage
        console.log(`${this.name} has ${this.health} health remaining`)
    }
}

class Character extends Entity {

}

class TrainingDummy extends Entity {
    constructor(name, health) {
        super(name, 0, health)
    }

    move() {
        return null
    }

    attack() {
        return null
    }
}

class Turret extends Entity {
    constructor(name, damage) {
        super(name, damage, -1)
    }

    move() {
        return null
    }

    takeDamage() {
        return null
    }
}

const turret = new Turret('Turret', 5)
const character = new Character('Ian', 3, 100)
const dummy = new TrainingDummy('TrainingDummy', 200)

turret.attack(character)
character.move()
character.attack(dummy)