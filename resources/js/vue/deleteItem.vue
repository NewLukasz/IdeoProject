<template>
    <div>
            <slot></slot>
            <font-awesome-icon @click="deleteMethod()" icon="trash" />
    </div>
</template>

<script>
export default {
    props: ['id'],
    methods:{
        deleteMethod(){
            axios.delete('/category-tree-view/'+this.id)
            location.reload()
        }
    }
}
</script>
