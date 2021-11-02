<template>
    <div>
        <delete-item :id="id" class="float-left"><slot></slot></delete-item>
        <add-new-internal-category :idOfParent="id" class="float-left"></add-new-internal-category>
        <add-new-category-on-the-same-level :idOfParent='parent_id'></add-new-category-on-the-same-level>
    </div>
</template>

<script>
import deleteItem from './deleteItem'
import addNewInternalCategory from './addNewInternalCategory'
import addNewCategoryOnTheSameLevel from './addNewCategoryOnTheSameLevel'
export default {
    props:['id','parent_id'],
    components:{
            deleteItem,
            addNewInternalCategory,
            addNewCategoryOnTheSameLevel
    }
}
</script>

<style scoped>

.float-left {
    float:left;
    padding-right: 5px;
}

</style>
