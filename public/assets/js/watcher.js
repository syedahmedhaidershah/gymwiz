export class Watcher {

    watch = null;

    state = null;

    getState = async() => {
        if (this.watch) {
            try {
                const a = await fetch(location.href, { method: 'GET' });
                const t = await a.text()
                if (!(this.state)) {
                    this.state = t;
                } else if (this.state && this.state !== t) {
                    this.stop();
                    setTimeout(() => {
                        location.reload()
                    }, 500);
                }
                // console.log(t);
                this.getState();
            } catch (exc) {
                // console.log(exc);
                setTimeout(() => {
                    this.getState();
                }, 500);
            }
            return Promise.resolve(true);
        }
        return Promise.resolve(false);
    }

    start = async() => {
        this.watch = true;
        const check = await this.getState();
    }

    stop = () => {
        this.watch = null;
    }
}
