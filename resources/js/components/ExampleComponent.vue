<template>
    <div>
        <table>
            <tr v-for="recipe in this.$store.state.listUserRecipes">
                <td><a href="">{{ recipe.name }}</a></td>
                <td>{{ recipe.description }}</td>
                <td><a href="">watch</a></td>
                <td><a href="">edit</a></td>
                <td><a href="">delete</a></td>
            </tr>
        </table>
    </div>
</template>

<script>
    export default {
        props: {
            routeGetRecipesByUserId: {
                type: String,
                require: true
            },
        },
        data() {
            return {
                listRecipes: 0,
            }
        },
        created() {
            this.getRecipesByUserId();
        },
        methods: {
            getRecipesByUserId() {
                axios.get(this.routeGetRecipesByUserId)
                    .then((response) => {
                        console.log(response.data.data);
                        this.$store.dispatch('setListUserRecipes', {status: response.data.data});
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            }
        }
    }
</script>
