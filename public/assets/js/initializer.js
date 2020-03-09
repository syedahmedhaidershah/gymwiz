import { Watcher } from './watcher.js';


export class Initializer {

    watch = null;

    init = () => {
        document.addEventListener('DOMContentLoaded', this.proceed, false);
    }

    proceed = () => {
        this.checkEnv();
    }

    checkEnv = () => {
        if (environment.env === 'local') {
            // console.log('here');
            this.watch = new Watcher();

            this.watch.start();
        }
    }
}
