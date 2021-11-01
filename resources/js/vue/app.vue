<template>
    <div>

        <delete-item :id="id"><slot></slot></delete-item>
    </div>
</template>

<script>
import deleteItem from './deleteItem.vue'
export default {
    props:['id'],
    components:{
            deleteItem
    }

}
</script>
