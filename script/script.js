new Vue({
    el: '#app',
    data(){
        return{
            count: 1,
            isActive: false
        };
    },
    methods:{
        increment(){
            this.count++;
        },
        decrement(){
            this.count--;
        },
        toggleButton(){
            this.isActive = !this.isActive;
        }
    }
});