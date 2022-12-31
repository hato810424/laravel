<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Add React in One Minute</title>
</head>

<body>

    <h2>Add React in One Minute</h2>
    <p>This page demonstrates using React with no build tooling.</p>
    <p>React is loaded as a script tag.</p>

    <!-- We will put our React component inside this div. -->
    <div id="like_button_container"></div>

    <!-- Load React. -->
    <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>

    <!-- Load our React component. -->
    <script>
        'use strict';

        const e = React.createElement;

        class LikeButton extends React.Component {
            constructor(props) {
                super(props);
                this.state = {
                    liked: false
                };
            }

            render() {
                if (this.state.liked) {
                    return 'You liked this.';
                }

                return e(
                    'button', {
                        onClick: () => this.setState({
                            liked: true
                        })
                    },
                    'Like'
                );
            }
        }

        const domContainer = document.querySelector('#like_button_container');
        const root = ReactDOM.createRoot(domContainer);
        root.render(e(LikeButton));
    </script>

</body>

</html>
