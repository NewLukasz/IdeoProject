<template>
    <div>
            <slot></slot>
            <font-awesome-icon @click="addMethod()" icon="plus-square" />
    </div>
</template>

<script>
export default {
    props: ['idOfParent'],
    methods:{
        addMethod(){
            alert("Hello from add method");

        }
    }
}
</script>
