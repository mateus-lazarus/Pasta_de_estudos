// Whenever a fragment isn't enclosed by tag, it will break as a fragment
// import React from 'react';

export default function Fragment(props) {
    // return (
    //     <div>
    //         <h2>Fragment</h2>
    //         <p>Be aware of this error</p>
    //     </div>
    // )

    // other option is using React.Fragment

    // return (
    //     <React.Fragment>
    //         <h2>Fragment</h2>
    //         <p>Be aware of this error</p>
    //     </React.Fragment>
    // )

    // another sintax sugar is use <>, that is the same as above
    // but cannot have properties

    return (
        <>
            <h2>Fragment</h2>
            <p>Be aware of this error</p>
        </>
    );
}
