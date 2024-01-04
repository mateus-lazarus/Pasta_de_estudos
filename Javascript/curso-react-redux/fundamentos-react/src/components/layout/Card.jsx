import './Card.css';

const anonFunction = props => {

    const style = {
        backgroundColor: props.color || 'brown',
        borderColor: props.borderColor || 'brown'
    }

    return (
        <div className='Card' style={style}>
            <div className='Title'>{props.title}</div>
            <div className='Content'>
                {props.children}
            </div>
        </div>
    );
};

export default anonFunction;
