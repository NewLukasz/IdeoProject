<template>
    <font-awesome-icon @click="addMethod()" icon="arrow-right" />
</template>

<script>
export default {
    props: ['idOfParent'],
    methods:{
        addMethod(){
            this.$prompt("Input new category name").then((nameOfNewCategory) => {
            axios.post('add-new-category/'+this.idOfParent,
            {
              nameOfNewCategory:nameOfNewCategory
            });
            location.reload()
        });
        }
    }
}
</script>
