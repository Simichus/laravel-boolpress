<template>
  <div>
      <h1 class="text-center">I miei Post</h1>
      <ul>
          <li v-for="post in posts" :key="post.id">
              <h4>{{post.title}}</h4>
              <p>{{post.content}}</p>
              <hr>
          </li>
      </ul>
  </div>
</template>

<script>
export default {
name:'PostList',
data(){
    return{
        posts: []
    }
},
methods: {
    
},
created(){
        axios.get('http://localhost:8000/api/posts').then(res => {
            this.posts = res.data;
        })
    
}
}
</script>

<style lang="scss" scoped>

</style>