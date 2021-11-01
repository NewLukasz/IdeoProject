<template>
    <div>


            <div @click="deleteAction()">
                <slot></slot>
                 DELETE
            </div>
    </div>
</template>

<script>
export default {
    props: ['id'],
    methods:{
        deleteAction(){
            axios.delete('/category-tree-view/'+this.id)
            location.reload()
        }
    }
}
</script>
