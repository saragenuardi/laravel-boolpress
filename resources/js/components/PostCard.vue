<template>
    <div class="card mb-3">
        <!-- <img src="..." class="card-img-top" alt="..." /> -->
        <div class="card-body">
            <p>Category {{ post.category ? post.category.name : 'nessuna' }}</p>
            <h5 class="card-title">{{ post.title }}</h5>
            <p class="card-text">
                {{ post.content.substr(0, 50) }}
            </p>
        </div>
        <!-- <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
             <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li> -->
        <!-- </ul>
          <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>  -->
    </div>
</template>

<script>
export default {
    name: "PostCard",
    props: {
        Post: Object
    },
    methods: {
        // troncateText(text, maxCharNumber) {
        //     if (text.lenght > maxCharNumber) {
        //         return text.substr(0, maxCharNumber) + '...';
        //     }
        //     return text;
        // }
    }
};
</script>

<style>
</style>