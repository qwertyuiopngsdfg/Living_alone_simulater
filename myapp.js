var sec1 = new Vue({
    el: '#section1',
    data: {
        cost1: 100000,
        cost2: 50000,
        cost3: 25000,
        cost4: 25000,
        cost5: 50000,
        cost6: 30000
    },
    computed: {
        totalCost1: function() {
                return this.cost1 + this.cost2 + this.cost3 + this.cost4 + this.cost5 + this.cost6
        }
    }
})

var sec2 = new Vue({
    el: '#section2',
    data: {
        cost1: 5000,
        cost2: 10000,
        cost3: 40000,
        cost4: 30000,
        cost5: 5000,
        cost6: 4000,
        cost7: 0
    },
    computed: {
        totalCost2: function() {
                return this.cost1 + this.cost2 + this.cost3 + this.cost4 + this.cost5 + this.cost6 
        }
    }
})

var sec3 = new Vue({
    el: '#section3',
    data: {
        cost1: 90000,
        cost2: 5000,
        cost3: 5000,
        cost4: 5000,
        cost5: 0
    },
    computed: {
        totalCost3: function() {
                return this.cost1 + this.cost2 + this.cost3 + this.cost4 + this.cost5
        }
    }
})

var sec4 = new Vue({
    el: '#section4',
    data: {
        cost1: 2000,
        cost2: 5000,
        cost3: 500,
        cost4: 3000,
        cost5: 2000,
        cost6: 0
    },
    computed: {
        totalCost4: function() {
                return this.cost1 + this.cost2 + this.cost3 + this.cost4 + this.cost5 + this.cost6
        }
    }
})

var sec5 = new Vue({
    el: '#section5',
    data: {
        cost1: 20000,
        cost2: 1000
    },
    computed: {
        totalCost5: function() {
                return this.cost1 + this.cost2
        }
    }
})