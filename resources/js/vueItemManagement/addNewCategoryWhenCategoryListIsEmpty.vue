<template>
    <div @click="addMethod()">

    <font-awesome-icon  icon="plus-square" />
    Add new category
    </div>
</template>

<script>
export default {
    props: ['idOfParent'],
    methods:{
        addMethod(){
            this.$prompt("Input new category name").then((nameOfNewCategory) => {
                if(!this.idOfParent){
                    axios.post('add-new-category/'+0,
                    {
                    nameOfNewCategory:nameOfNewCategory
                    });
                }else{
                    axios.post('add-new-category/'+this.idOfParent,{
                    nameOfNewCategory:nameOfNewCategory
                    });
                }
            location.reload()
        });
        }
    }
}
</script>
