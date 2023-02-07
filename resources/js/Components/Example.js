import React, { useState } from 'react';
import ReactDOM from 'react-dom';
import { useEffect } from 'react';
import axios from 'axios';
import Card from './Card';


function Example() {
    const [posts, setPosts] = useState([]);
    const [isLoaded, setIsLoaded] = useState(false);

    useEffect(()=>{ axios.get('/api/posts')
    .then(res => {
        setPosts(res.data.data);
        setIsLoaded(true);
        console.log(res.data.data);
    })
    .catch(err => {
        console.error(err);
    })}
    ,[])

    if (!isLoaded)
        return (<div className='text-center'>Loading...</div>)
    else
    return (
        <div className="container">

                <div className="row justify-content-center">

                    {posts.map((post,key)=>

                        <Card key={key} title={post.title} description={post.description} img={post.file} tags={post.tag} category={post.categories.name}/>


    )}

                </div>
            </div>

    );
}

export default Example;

if (document.getElementById('app2')) {
    ReactDOM.render(<Example />, document.getElementById('app2'));
}
