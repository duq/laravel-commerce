<template>
    <nav>
        <v-toolbar text>
<!--            <v-icon class="grey&#45;&#45;text"></v-icon>-->
            <v-toolbar-title class="text-uppercase grey--text ml-4">

                <span class="font-weight-light">Giuseppe</span>
<!--                <span class="text-lowercase">restaurant</span>-->
            </v-toolbar-title>
            <v-spacer></v-spacer>
            <router-link :to="{ name: 'checkout' }">
            <v-btn class="btn-link" text color="grey">
                <v-icon left>mdi-cart</v-icon>
                <span>My cart</span>
            </v-btn>
            </router-link>
        </v-toolbar>
    </nav>
</template>

<script>
    import Popup from './Popup';

    export default {
        components: {Popup},
        props: {
            route: String,
        }
    }
</script>

<style>
 .btn-link:hover {
     text-decoration: none;
 }
</style>
