<template>
    <div class="container">
        <ul>
            <li v-for="item in fruits" :key="item.id">
                <span @click="sayHello">{{item}}</span>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    props: { items: Array },
    data(){
        return { fruits : _.cloneDeep(this.items) };
    },
    methods: {
        sayHello(){
            console.log(this)
        }
    },
    destroyed: {
        items:null
    }
}
function hello(){
    console.log('xxxx');
}
</script>
