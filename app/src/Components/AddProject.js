import React, { Component } from 'react';
import ProjectItem from './Projectitem';
import uuid from 'uuid';

class AddProject extends Component {
    constructor(){
        super();
        this.state={
            newProject:{}
        }
    }
    static defaultProps = {
        categories:['web design', 'web dev', 'mobile dev']
    }

    handleSubmit(e){
       if(this.refs.title.value === ''){
           alert('Title is empty');
       }else{
           this.setState({newProject:{
                id: uuid.v4(), 
                title: this.refs.title.value,
                category: this.refs.category.value
            }}, function(){
                //console.log(this.state);
                this.props.addProject(this.state.newProject);
            });
       }
    e.preventDefault();
    }
    
  render(){
    let categoryOptions = this.props.categories.map(category => {
            return <option key={category} value={category}>{category}</option>;
    });

    return (
      <div>
        <h3>AddProject </h3>
            <form onSubmit={this.handleSubmit.bind(this)}>
                <div>
                    <label>Title</label><br />
                    <input type="text" ref="title" name="title"/>
                </div>

                <div>
                <label>Title</label><br />
                <select ref="category">
                
                {categoryOptions}
                </select>
            </div>
            <input type="submit" value="submit" />
            </form>
      </div>
    );
  }
}

export default AddProject;
