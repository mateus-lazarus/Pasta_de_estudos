import './App.css'

import First from './basics/First'
import WithParameters from './basics/WithParameters'
import Fragment from './basics/Fragment'
import LuckNumber from './basics/LuckNumber'
import Card from './layout/Card'



var arrowFunction = () => (

    <div className='App'>
        <h1>Fundametals React</h1>

        <div className='ListOfCards'>
            <Card title='04 - Random Number' color='#0F0' borderColor='#0F0'>
                <LuckNumber numberMin={1} numberMax={10} />
            </Card>

            <Card title='03 - Fragment'>
                <Fragment />
            </Card>

            <Card title='02 - With Parameters'>
                <WithParameters
                    title='College Grades'
                    studentName='Johnathan'
                    studentGrade={9.5}
                />
            </Card>

            <Card title='01 - First Component'>
                <First></First>
            </Card>
        </div>


    </div>
);

// export default function App(props) { return () }
// export default props => {}
// export default () => {}
// export default _ =>
export default arrowFunction;
