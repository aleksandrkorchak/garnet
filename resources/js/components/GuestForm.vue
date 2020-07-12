<template>
    <div class="row justify-content-center">
        <form class="col-md-5" method="post">

            <input type="hidden" name="_token" :value="csrf">

            <div class="col-md-8">
                <div class="form-group">
                    <input type="text" class="form-control" id="user" name="user" placeholder="Имя пользователя">
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="form-control" id="text" name="text" rows="3" placeholder="Текст сообщения"></textarea>
                </div>
            </div>

            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data: () => {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }
    }
</script>

<style scoped>

</style>
