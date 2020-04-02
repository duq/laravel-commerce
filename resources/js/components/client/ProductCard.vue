<template>
    <div class="team">
        <h1 class="font-weight-thin font-weight-light ml-4 text-secondary">Menu</h1>
        <v-container>
            <v-layout row wrap>
                <v-flex xs12 sm6 md4 lg4 v-for="product in products" :key="product.id">
                    <v-card text class="text-xs-center ma-3 m-4">
                        <v-responsive>
                            <v-img :src="product.image"></v-img>
<!--                            <v-avatar size="100" class="grey lighten-2">-->
<!--                                <img :src="product.image">-->
<!--                            </v-avatar>-->
                        </v-responsive>
                        <v-card-title>
                            {{ product.name }}
                            <div class="grey--text">
                            {{ product.price }}$
                            </div>
                        </v-card-title>
                        <v-card-text>
                            <div class="grey--text">{{ product.description }}</div>
                        </v-card-text>
                        <v-card-actions>
                            <v-btn text color="grey">
                                <v-icon small left>mdi-cart</v-icon>
                                <span>Add co cart</span>
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-container>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                products: [
                    { id: 1, name: 'PEPPERONI PIZZA', description: 'Calabrese and pepperoni sausage, Roquito peppers, tomato, mozzarella, basil, honey and Gran Milano cheese served on a Romana base.', image: '/img/pizza1.jpg', price: "12"},
                    { id: 2, name: 'PEPPERONI PIZZA', description: 'Calabrese and pepperoni sausage, Roquito peppers, tomato, mozzarella, basil, honey and Gran Milano cheese served on a Romana base.', image: '/img/pizza1.jpg', price: "12"},
                    { id: 3, name: 'PEPPERONI PIZZA', description: 'Calabrese and pepperoni sausage, Roquito peppers, tomato, mozzarella, basil, honey and Gran Milano cheese served on a Romana base.', image: '/img/pizza1.jpg', price: "12"},
                    { id: 4, name: 'PEPPERONI PIZZA', description: 'Calabrese and pepperoni sausage, Roquito peppers, tomato, mozzarella, basil, honey and Gran Milano cheese served on a Romana base.', image: '/img/pizza1.jpg', price: "12"},
                    { id: 5, name: 'PEPPERONI PIZZA', description: 'Calabrese and pepperoni sausage, Roquito peppers, tomato, mozzarella, basil, honey and Gran Milano cheese served on a Romana base.', image: '/img/pizza1.jpg', price: "12"},
                    { id: 6, name: 'PEPPERONI PIZZA', description: 'Calabrese and pepperoni sausage, Roquito peppers, tomato, mozzarella, basil, honey and Gran Milano cheese served on a Romana base.', image: '/img/pizza1.jpg', price: "12"},
                    { id: 7, name: 'PEPPERONI PIZZA', description: 'Calabrese and pepperoni sausage, Roquito peppers, tomato, mozzarella, basil, honey and Gran Milano cheese served on a Romana base.', image: '/img/pizza1.jpg', price: "12"},
                    { id: 8, name: 'PEPPERONI PIZZA', description: 'Calabrese and pepperoni sausage, Roquito peppers, tomato, mozzarella, basil, honey and Gran Milano cheese served on a Romana base.', image: '/img/pizza1.jpg', price: "12"},
                    { id: 9, name: 'PEPPERONI PIZZA', description: 'Calabrese and pepperoni sausage, Roquito peppers, tomato, mozzarella, basil, honey and Gran Milano cheese served on a Romana base.', image: '/img/pizza1.jpg', price: "12"},
                ]
            }
        }
    }
</script>

<style scoped>

</style>
