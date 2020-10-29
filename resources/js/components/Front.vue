<template>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-3">
                <h1>Nolt Catalog</h1>
                <div class="list-group">
                    <a
                        class="list-group-item"
                        v-for="category in categories"
                        :key="category"
                        >{{ category.name }}</a
                    >
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            categories: [],
            products: [],
        };
    },
    mounted() {
        this.loadCategories();
        this.loadProducts();
    },
    methods: {
        loadCategories: function () {
            axios
                .get("/api/v1/categories")
                .then((response) => {
                    this.categories = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        loadProducts: function () {},
    },
};
</script>
