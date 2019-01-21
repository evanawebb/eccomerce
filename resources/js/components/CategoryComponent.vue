<template>
<b-card-group>
  <div v-for="(category, index) in categories" :key="index">
    <b-card :title="category.title"
            img-src="https://picsum.photos/600/300/?image=25"
            img-alt="Image"
            img-top
            tag="article"
            style="max-width: 20rem;"
            class="mb-3 mx-3">
      <p class="card-text">
       {{ category.description }}
      </p>
      <b-button href="#" variant="primary">Go to {{ category.title }}</b-button>
    </b-card>
  </div>
  </b-card-group>
</template>
<script>
export default {
  data () {
    return {
      categories: []
    }
  },
  mounted() {
    this.categories = [
      {
        title: 'pants',
        description: 'Some quick example text to build on the card title, pants, and make up the bulk of the card\'s content.'
      },
      {
        title: 'Shirts',
        description: 'Some quick example text to build on the card title, shirts, and make up the bulk of the card\'s content.'
      },
      {
        title: 'Outerwear',
        description: 'Some quick example text to build on the card title, outerwear, and make up the bulk of the card\'s content.'
      }
    ]
  }
}
</script>
