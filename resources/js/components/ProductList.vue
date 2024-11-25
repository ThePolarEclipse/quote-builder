<template>
    <div>
        <h2>Products</h2>
        <ul>
            <li v-for="product in products" :key="product.id">
                {{ product.name }} - ${{ product.price }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return { products: [] };
    },
    mounted() {
        fetch('/api/products')
            .then(res => res.json())
            .then(data => (this.products = data));
    },
};
</script>
