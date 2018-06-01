<template>
    <div class="card card-default chat-box">
        <div class="card-header">
            <b :class="{'text-danger':session_block}">
                {{friend.name}} 
                <span v-if="session_block">(Zablokowane)</span>
            </b>

            <!-- close button -->
            <a href="" @click.prevent="close">
                <i class="fa fa-times float-right" aria-hidden="true"></i>
            </a>
            <!-- close button end -->

            <!-- options button -->
            <div class="dropdown float-right mr-3">
                <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cogs"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#" v-if="session_block" @click.prevent="unblock">Odblokuj</a>
                    <a class="dropdown-item" href="#" v-else @click.prevent="block">Zablokuj</a>
                    <a class="dropdown-item" href="#" @click.prevent="clear">Wyczyść</a>
                </div>
            </div>
            <!-- options button end -->

        </div>
        <div class="card-body" v-chat-scroll>
            <p class="card-text" v-for="chat in chats" :key="chat.message">
                {{chat.message}}
            </p>
        </div>
        <form class="card-footer" @submit.prevent="send">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Wpisz treść wiadomości" :disabled="session_block">
            </div>
        </form>
    </div>
</template>

<script>
export default {
    props:['friend'],
    data(){
        return{
            chats:[],
            session_block:false
        }
    },
    methods: {
        send(){
            console.log('Wysłano')
        },
        close(){
            this.$emit('close')
        },
        clear(){
            this.chats = []
        },
        block(){
            this.session_block = true
        },
        unblock(){
            this.session_block = false
        }
    },
    created(){
        this.chats.push(
            {message: 'Heeey'}, 
            {message: 'How are you???'},
            {message: 'jestem ostatnia ;)'}
        )
    }
}
</script>

<style>
    .chat-box{height:400px}
    .card-body{overflow-y: scroll}
</style>
