import React from 'react';
import Logo from './ApplicationLogo';

export default function Card({ title, img, description, category, tags }) {
    return (
        <div className="col-md-6 mb-2">
            <div className="card">

                <div className="card-header">
                    <Logo className="logo"/> {title}
                </div>

                <div className="card-body">

                    <img src={"img/"+img} alt={img}/>

                    <p>{description }</p>
                    <div className="category">Categoria <code>{category}</code></div>

                    <div className="tags">Tags
                        {tags.map((tag,key)=>
                                <code key={key}> { tag.name } </code>
                        )}
                    </div>
                </div>
            </div>
        </div>
    );
}
