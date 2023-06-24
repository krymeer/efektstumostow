class Header extends React.Component {
    constructor(props)
    {
        super(props);
    }

    render()
    {
        return (
            <header className="container">
                <h1>Efekt Stu Mostów</h1>
                <address>Wrocław, dolnośląskie</address>
                <p><time dateTime="2023-09-08">8</time> – <time dateTime="2023-09-10">10 września 2023 roku</time></p>
            </header>
        );
    }
}

class Main extends React.Component {
    constructor(props)
    {
        super(props);
        this.state = {
            days: 0,
            hours: 0,
            minutes: 0,
            seconds: 0
        };

        this.updateTimer = this.updateTimer.bind(this);
    }

    updateTimer(init)
    {
        let delta = Math.abs(new Date() - new Date('2023-09-08 17:00:00')) / 1000;

        const days = Math.floor(delta / 86400);
        delta      -= days * 86400;

        const hours  = Math.floor(delta / 3600) % 24;
        delta       -= hours * 3600;

        const minutes  = Math.floor(delta / 60) % 60;
        delta         -= minutes * 60;

        const seconds = Math.floor(delta % 60);

        this.setState({days, hours, minutes, seconds})
    }

    componentDidMount()
    {
        this.updateTimer();
        this.interval = window.setInterval(() => this.updateTimer(), 1000);
    }

    componentWillUnmount()
    {
        window.clearInterval(this.interval);
    }

    render()
    {
        const daysStr  = this.state.days === 1 ? 'dzień' : 'dni'; 
        let hoursStr   = 'godzin';
        let minutesStr = 'minut';
        let secondsStr = 'sekund';

        switch (this.state.hours)
        {
            case 1:
                hoursStr += 'ę';
                break;
            case 2: case 3: case 4: case 22: case 23:
                hoursStr += 'y';
        }

        switch (this.state.minutes)
        {
            case 1:
                minutesStr += 'ę';
                break;
            case 2: case 3: case 4: case 22: case 23: case 24: case 32: case 33: case 34: case 42: case 43: case 44: case 52: case 53: case 54:
                minutesStr += 'y';
        }

        switch (this.state.seconds)
        {
            case 1:
                secondsStr += 'ę';
                break;
            case 2: case 3: case 4: case 22: case 23: case 24: case 32: case 33: case 34: case 42: case 43: case 44: case 52: case 53: case 54:
                secondsStr += 'y';
        }

        return (
            <main className="container">
                <h2>Widzimy się już za:</h2>
                <div>
                    <p><span id="days">{this.state.days}</span> {daysStr}</p>
                    <p><span id="hours">{this.state.hours}</span> {hoursStr}</p>
                    <p><span id="minutes">{this.state.minutes}</span> {minutesStr}</p>
                    <p><span id="seconds">{this.state.seconds}</span> {secondsStr}</p>
                </div>
            </main>
        );
    }
}

class Footer extends React.Component {
    constructor(props)
    {
        super(props);
    }

    render()
    {
        return (
            <footer className="container">
                <h2>Skontaktuj się z&nbsp;nami:</h2>
                <div>
                    <a href="mailto:kontakt@efektstumostow.pl">kontakt@efektstumostow.pl</a>
                    <a href="mailto:albogruboalbowcale@efektstumostow.pl">albogruboalbowcale@efektstumostow.pl</a>
                </div>
            </footer>
        );
    }
}

class Page extends React.Component {
    constructor(props)
    {
        super(props);
    }

    render()
    {

        return (
            <div className="docSlider">
                <Header/>
                <Main/>
                <Footer/>
            </div>
        );
    }
}

window.onload = event => {
    const rootNode = document.getElementById('root');
    const root     = ReactDOM.createRoot(rootNode);
    
    root.render(<Page/>);
};