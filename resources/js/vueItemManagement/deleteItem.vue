<template>
        <font-awesome-icon @click="confirmationBeforeDelete()" icon="trash" />
</template>

<script>
export default {
    props: ['id'],
    methods:{
        deleteMethod(){
            axios.delete('/category-tree-view/'+this.id)
            location.reload()
        },
        confirmationBeforeDelete(){
            this.$confirm("Are you sure?").then(() => {
            this.deleteMethod();
            });
        }
    }
}
</script>
