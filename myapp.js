var app = new Vue({
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
        totalCost: function() {
                return this.cost1 + this.cost2
        }
    }
})