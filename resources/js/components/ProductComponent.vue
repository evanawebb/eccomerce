<template>
    <div>
        <b-card-group deck>
            <div v-for="(product, index) in product" :key="index">
                <b-card img-src="https://placekitten.com/1000/300"
                        img-alt="Card image"
                        img-top>
                    <p class="card-text">
                        Some quick example text to build on the card and make up the bulk of the card's content.
                    </p>
                </b-card>
            </div>
        </b-card-group>
    </div>
</template>

<script>
export default {
    props: ['productList'],
    data () {
        return {

        }
    },

}

</script>
