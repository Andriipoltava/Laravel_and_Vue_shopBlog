export default {
    actions: {
        async feachPost(ctx) {
            const res = await fetch('https://jsonplaceholder.typicode.com/posts')
            const posts = await res.json();
            ctx.commit('updatePost', posts)
        }
    },
    mutations: {
        updatePost(state, posts) {
            state.posts = posts
        },
        findPost(state, findID) {
            state.findPost = findID
        },
        createPost(state, post) {
            state.posts.unshift(post)
        },

    },
    state: {
        posts: [],
        findPost: null,
    },
    getters: {
        validPosts(state) {
            return state.posts.filter(p => {
                return p.title && p.body
            })
        },
        singlePost(state) {
            let post = [{title: '', body: ''}]
            if (state.posts.length)
                post = state.posts.filter(p => {
                    return p.id == state.findPost
                })
            console.log()
            if (post.length)
                return post[0]
            else
                window.location.href = 'http://127.0.0.1:8000/#';
        },

        allPosts(state) {
            return state.posts;
        },
        countPosts(state, getters) {
            return getters.validPosts.length;
        }
    },
}
