import { GetEntity } from './entity/GetEntity';
export type * from './CrowdSourcedLyricsTypes';
import { inspect } from 'node:util';
import type { Context, Feature } from './types';
import { config } from './Config';
import { CrowdSourcedLyricsEntityBase } from './CrowdSourcedLyricsEntityBase';
import { Utility } from './utility/Utility';
import { BaseFeature } from './feature/base/BaseFeature';
declare const stdutil: Utility;
declare class CrowdSourcedLyricsSDK {
    _mode: string;
    _options: any;
    _utility: Utility;
    _features: Feature[];
    _rootctx: Context;
    constructor(options?: any);
    options(): any;
    utility(): any;
    prepare(fetchargs?: any): Promise<any>;
    direct(fetchargs?: any): Promise<Error | {
        ok: boolean;
        status: number;
        headers: any;
        data: any;
        err?: undefined;
    } | {
        ok: boolean;
        err: any;
        status?: undefined;
        headers?: undefined;
        data?: undefined;
    }>;
    _rawRequest(fetchargs?: any): Promise<Error | {
        ok: boolean;
        status: number;
        headers: any;
        data: any;
        err?: undefined;
    } | {
        ok: boolean;
        err: any;
        status?: undefined;
        headers?: undefined;
        data?: undefined;
    }>;
    graphql(query: string, variables?: any, ctrl?: any): Promise<any>;
    Get(entopts?: Record<string, any>): GetEntity;
    static test(testoptsarg?: any, sdkoptsarg?: any): CrowdSourcedLyricsSDK;
    tester(testopts?: any, sdkopts?: any): CrowdSourcedLyricsSDK;
    toJSON(): {
        name: string;
    };
    toString(): string;
    [inspect.custom](): string;
}
declare const SDK: typeof CrowdSourcedLyricsSDK;
export { stdutil, config, BaseFeature, CrowdSourcedLyricsEntityBase, CrowdSourcedLyricsSDK, SDK, };
