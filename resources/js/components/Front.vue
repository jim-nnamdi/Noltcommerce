<template>
    <div class="container mt-5 mb-5" :class="{ loading: loading }">
        <div class="row">
            <div class="col-md-3">
                <h1>Nolt Catalog</h1>
                <form @submit.prevent="addCategory">
                    <div class="form-group">
                        <input
                            class="form-control"
                            v-model="category.name"
                            type="text"
                            placeholder="name"
                        />
                    </div>
                    <button type="submit" class="btn btn-light btn-block">
                        Submit
                    </button>
                </form>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li
                            :class="[{ disabled: !paginations.prev_page_url }]"
                            class="page-item"
                        >
                            <a
                                class="page-link"
                                @click="
                                    loadCategories(paginations.prev_page_url)
                                "
                                href="#"
                                >Previous</a
                            >
                        </li>
                        <li class="page-item disabled">
                            <a class="page-link text-dark" href="#"
                                >Page {{ paginations.current_page }} of
                                {{ paginations.last_page }}</a
                            >
                        </li>
                        <li
                            class="page-item"
                            :class="[{ disabled: !paginations.next_page_url }]"
                        >
                            <a
                                class="page-link"
                                @click="
                                    loadCategories(paginations.next_page_url)
                                "
                                href="#"
                                >Next</a
                            >
                        </li>
                    </ul>
                </nav>
                <div class="list-group">
                    <a
                        class="list-group-item"
                        v-for="category in categories"
                        :key="category.id"
                        >{{ category.name }}
                        <hr />
                        <button
                            class="btn btn-warning"
                            @click="editCategory(category)"
                        >
                            Edit
                        </button>
                        <button
                            class="btn btn-danger"
                            @click="deleteCategory(category.id)"
                        >
                            Delete
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row mt-4">
                    <div
                        class="col-md-4 mb-4"
                        v-for="product in products"
                        :key="product.id"
                    >
                        <div class="card">
                            <img
                                class="card-img"
                                src="http://placehold.it/300x200"
                            />
                            <div class="card-body">
                                <h3>
                                    <a href="#">{{ product.name }}</a>
                                </h3>
                                <h3>${{ product.price }}</h3>
                                <p class="mt-3">
                                    {{ product.description }}
                                </p>
                            </div>
                        </div>
                    </div>
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
            category: {
                id: "",
                name: "",
            },
            category_id: "",
            paginations: {},
            edit: false,
            products: [],
            loading: true,
        };
    },
    created() {
        this.loadCategories();
        this.loadProducts();
    },
    methods: {
        loadCategories: function (page_url) {
            let vm = this;
            page_url = page_url || "/api/v1/categories";
            axios
                .get(page_url)
                .then((response) => {
                    this.categories = response.data.data;
                    vm.makeCategoryPagination(response.meta, response.links);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        makeCategoryPagination: function (meta, links) {
            let pagination = {
                current_page: meta.current_page,
                last_page: meta.last_page,
                next_page_url: links.next,
                prev_page_url: links.prev,
            };
            this.paginations = pagination;
        },
        deleteCategory: function (id) {
            if (confirm("Are you sure you wanna delete ?")) {
                axios
                    .delete(`/api/v1/categories/${id}`)
                    .then((response) => {
                        this.category.name = "";
                        alert("Article deleted!");
                        this.loadCategories();
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            }
        },
        addCategory: function () {
            if (this.edit === false) {
                // add category
                axios
                    .post("/api/v1/categories", {
                        name: this.category.name,
                    })
                    .then((response) => {
                        this.category.name = "";
                        alert("Article Added");
                        this.loadCategories();
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            } else {
                // update category
                axios
                    .put("/api/v1/categories", {
                        id: this.category.category_id,
                        name: this.category.name,
                    })
                    .then((response) => {
                        this.category.name = "";
                        alert("category updated");
                        this.loadCategories();
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            }
        },
        editCategory: function (category) {
            this.edit = true;
            this.category.id = category.id;
            this.category.category_id = category.id;
            this.category.name = category.name;
        },
        loadProducts: function () {
            axios
                .get("/api/v1/products")
                .then((response) => {
                    this.products = response.data.data;
                    this.loading = false;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>
