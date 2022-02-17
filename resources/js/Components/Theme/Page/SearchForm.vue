<template>
    <form method="GET" action class="d-none">
        <div class="mb-4">
            <div class="input-group">
                <input
                    type="search"
                    class="form-control form-control-alt"
                    name="q"
                    :placeholder="placeholder"
                />
                <span class="input-group-text bg-body border-0">
                    <i class="fa fa-search"></i>
                </span>
            </div>
        </div>
    </form>
</template>
<script setup>
defineProps({ placeholder: { type: String, default: "Search everything..." } })
</script>
