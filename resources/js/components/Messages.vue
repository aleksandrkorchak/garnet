<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="list-group">
                <div v-if="messages.length">
                    <div v-for="message in messages" class="list-group-item">
                        <h5>{{ message.user }}</h5>
                        <p class="m-0">
                            {{ message.text }}
                        </p>
                    </div>
                </div>
                <div v-else>
                    <div class="list-group-item">
                        <p class="m-0 text-center">
                            Нет сообщений
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'messages'
        ]
    }
</script>
