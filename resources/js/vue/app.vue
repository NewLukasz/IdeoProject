<template>
    <div>
        <delete-item :id="id" class="float-left"><slot></slot></delete-item><add-item :idOfParent="id"></add-item>
    </div>
</template>

<script>
import deleteItem from './deleteItem.vue'
import addItem from './addItem'
export default {
    props:['id'],
    components:{
            deleteItem,
            addItem
    }
}
</script>

<style scoped>

.float-left {
    float:left;
    padding-right: 5px;
}

</style>
