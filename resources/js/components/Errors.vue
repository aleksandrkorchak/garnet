<template>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="alert alert-danger">
                <ul v-for="error in errors" class="list-group">
                    <li>{{ error }}</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'errors'
        ]
    }
</script>

<style scoped>
    li {
        list-style-type: none;
    }
</style>
