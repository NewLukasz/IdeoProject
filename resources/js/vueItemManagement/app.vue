<template>
<div>
    <div v-if='id'>
        <slot></slot>
        <delete-item :id="id"></delete-item>
        <add-new-internal-category :idOfParent="id"></add-new-internal-category>
        <add-new-category-on-the-same-level :idOfParent="parent_id"></add-new-category-on-the-same-level>
    </div>
    <div v-if='!id'>
        <add-new-category-when-category-list-is-empty></add-new-category-when-category-list-is-empty>
    </div>
</div>
</template>

<script>
import deleteItem from './deleteItem'
import addNewInternalCategory from './addNewInternalCategory'
import addNewCategoryOnTheSameLevel from './addNewCategoryOnTheSameLevel'
import addNewCategoryWhenCategoryListIsEmpty from './addNewCategoryWhenCategoryListIsEmpty'
export default {
    props:['id','parent_id'],
    components:{
        deleteItem,
        addNewInternalCategory,
        addNewCategoryOnTheSameLevel,
        addNewCategoryWhenCategoryListIsEmpty
    }
}
</script>
