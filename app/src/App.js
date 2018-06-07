import React, { Component } from 'react';
import Projects from './Components/Projects';
import AddProject from './Components/AddProject';
import uuid from 'uuid';
import './App.css';

class App extends Component {
  constructor(){
    super();
    this.state ={
      projects: []
    }
  }

  componentWillMount(){
    this.setState({projects: [
      {
        id: uuid.v4(),
        title: 'buisness site',
        category: 'web design'
      },
      {
        id: uuid.v4(),
        title: 'ecomerce site',
        category: 'web dev'
      },
      {
        id: uuid.v4(),
        title: 'social site',
        category: 'Mobile design'
      },
    ]});
  }

  handleAddProject(project){
    let projects = this.state.projects;
    projects.push(project);
    this.setState({projects});
  }

  handleDeleteProject(id){
    let projects = this.state.projects;
    let index = projects.findIndex(x => x.id === id);
    projects.splice(index, 1);
    this.setState({projects});
  }
  render() {
    return (
      <div className="App">
          my app
          <Projects projects={this.state.projects}/>
          <AddProject addProject={this.handleAddProject.bind(this)} onDelete={this.handleDeleteProject.bind(this)}/>
      </div>
    );
  }
}

export default App;
