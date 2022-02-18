Vue.component('productsale', {
    data: function () {
        return {
            products: [],
        }
    },

    props: {
        
    },

    methods: {
        addToCart(sale) {
            product.stock--;

            this.$root.$emit('add-to-cart', product);
        },
    },

    created() {
        let self = this;

        // Get all products calling function in controller (Ajax call)
        axios({
            method: 'GET',
            url: 'home/productsale',
            headers: {
                "X-Requested-With": "XMLHttpRequest"
            }
        }).then(function(response) {
            self.products = response.data.products;
        }).catch(function(response) {

        })
    },

    template: `
        <div class="row">
            <div class="col-md-3 pt-3 p-2 product-col" v-for="product in productsale">
                <div class="card">
                    <img :src="'/public/images/webshop/' + product.image" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title text-style">{{ product.name }}</h5>
                        <p  class="text-style>"Stock: {{ product.stock }}</p>
                        <p class="price text-style"> &euro; {{ product.price }}</p>
                        <input type="button" class="btn text-style" :disabled="product.stock === 0" @click="addToCart(product)" value="Add to cart">
                    </div>
                </div>
            </div>
        </div>`,
})


