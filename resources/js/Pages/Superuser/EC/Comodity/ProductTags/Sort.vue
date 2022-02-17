<template>
    <PageHeader :breadcrumb="breadcrumb" title="商品タグ並び替え" />

    <div class="content">
        <Block rounded :loading="isLoading">
            <template #title>* ドラッグアンドドロップで移動できます。</template>
            <template #content>
                <div class="list-group mb-4" ref="sortable">
                    <div
                        :key="index"
                        :id="tag.id"
                        v-for="(tag, index) in tags"
                        class="tag list-group-item list-group-item-action cursor-pointer select-none"
                    >{{ tag.name }}</div>
                </div>
            </template>
        </Block>
    </div>
</template>
<script setup>
import axios from 'axios';
import Sortable from 'sortablejs'
import { Laravel } from '@/Helpers';
import { onMounted, ref } from 'vue';

const sortable = ref(null)

const breadcrumb = ref([
    { label: "EC", link: null },
    { label: "商品", link: null },
    { label: "商品タグ並び替え", link: null }
])

const props = defineProps({ tags: Array })

const sorting = ref([])
const isLoading = ref(false)

onMounted(() => new Sortable(sortable.value, {
    animation: 150,
    ghostClass: 'blue-background-class',
    onEnd: function () {

        document.querySelectorAll('.list-group .tag').forEach(({ id }, index) => {

            sorting.value[index] = { id: id, order: index };

            if (props.tags.length === index + 1) {
                isLoading.value = true;
                axios.post(Laravel.route('superuser.tags.sort'), { order: sorting.value }).then(() => {
                    isLoading.value = false;
                });
            }
        });

    },
}))

</script>
